<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

// the Text class
use Cake\Utility\Text;

use Cake\ORM\TableRegistry;

/**
 * Articles Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Article get($primaryKey, $options = [])
 * @method \App\Model\Entity\Article newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Article|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Article[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Article findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArticlesTable extends Table
{
    var $idArticle;
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('articles');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'article_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'articles_tags',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            //->maxLength('title', 255)
            ->requirePresence('title', 'create');
            //->notEmptyString('title');
            //->minLength('title', 5);

        $validator->add('title', 'myNotEmptyString', [
            'rule' => function ($value, $context) {
                if( strlen($value)==0 ){
                    return false;
                }
                return true;
            },
            'message' => __("Title can't be empty string.")
        ]);
        
        $validator->add('title', 'minLength_title', [
            'rule' => ['minLength', 5],
            'message' => __('Title must have minimum five length.')
        ]);        
        
        $validator->add('title', 'maxLength_title', [
            'rule' => ['maxLength', 255],
            'message' => __("Title mustn't have maximum 255 length.")
        ]);
        
        //echo var_dump($this->idArticle);
        
        $parameter = $this->idArticle;
        $validator->add('title', 'myIsUnique', [
            'rule' => function ($value, $context) use($parameter) {
                $found = null;
                $articles = TableRegistry::getTableLocator()->get('Articles');
                $slug = strtolower(Text::slug(trim($value)));
                //
                if( $context['newRecord'] == false ){
                    $found = $articles->findById($context['data']['id'])->first();
                    if( $found->slug == $slug )
                        return true;
                    $found2 = $articles->findBySlug($slug)->first();
                    if($found2 != null)
                        return false;
                }else{
                    $found = $articles->findBySlug($slug)->first();
                    if($found != null)
                        return false;
                }
                //
                return true;
            },
            'message' => __("This title is doing use by other article.")
        ]);

        /*
        $validator
            ->scalar('slug')
            ->maxLength('slug', 191)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug')
            ->add('slug', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
        */
        
        $validator
            ->scalar('body')
            ->allowEmptyString('body');
            //->minLength('body', 10);

        $validator
            ->boolean('published')
            ->allowEmptyString('published');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        //$rules->add($rules->isUnique(['slug']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }

    public function beforeSave($event, $entity, $options)
    {
        $this->idArticle=null;
        if( $entity->isNew() ) {
            $this->idArticle = null;
            $entity->published = false;
        }else{
            $this->idArticle = $entity->id;
        }
        $entity->title = ucwords(trim($entity->title));
        $entity->slug = strtolower(Text::slug(trim($entity->title)));
        //
        if ( strlen(trim($entity->body)) == 0 ){
            $entity->body = null;
        }else{
            $entity->body = ucfirst(strtolower(trim($entity->body)));
        }
    }
}

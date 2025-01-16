<?php

use yii\db\Migration;

/**
 * Class m240925_011459_create_app_tables
 */
class m240925_011459_create_app_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Create user table
        $this->createTable('{{%user}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'username' => $this->string()->notNull()->unique(),
            'verification_token' => $this->string()->defaultValue(null),
            'auth_key' => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        // Create RBAC tables
        $this->createTable('{{%auth_rule}}', [
            'name' => $this->string()->notNull(),
            'data' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'PRIMARY KEY (name)',
        ]);

        $this->createTable('{{%auth_item}}', [
            'name' => $this->string()->notNull(),
            'type' => $this->integer()->notNull(),
            'description' => $this->text(),
            'rule_name' => $this->string(),
            'data' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'PRIMARY KEY (name)',
            'KEY rule_name (rule_name)',
            'KEY type (type)',
        ]);

        $this->createTable('{{%auth_item_child}}', [
            'parent' => $this->string()->notNull(),
            'child' => $this->string()->notNull(),
            'PRIMARY KEY (parent, child)',
            'KEY child (child)',
            'FOREIGN KEY ([[parent]]) REFERENCES {{%auth_item}} ([[name]]) ' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
            'FOREIGN KEY ([[child]]) REFERENCES {{%auth_item}} ([[name]]) ' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
        ]);

        $this->createTable('{{%auth_assignment}}', [
            'item_name' => $this->string()->notNull(),
            'user_id' => $this->string()->notNull(), // Changed to string
            'created_at' => $this->integer(),
            'PRIMARY KEY (item_name, user_id)',
            'FOREIGN KEY ([[item_name]]) REFERENCES {{%auth_item}} ([[name]])' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
            'FOREIGN KEY ([[user_id]]) REFERENCES {{%user}} ([[id]]) ' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
        ]);

        // Create main_banner table
        $this->createTable('{{%main_banner}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'sub_title' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);

        // Create event table
        $this->createTable('{{%event}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'address' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'date' => $this->string()->defaultValue(null),
            'event_organizer' => $this->string()->defaultValue(null),
            'event_cost' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);

        // Create blog table
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create gallery table
        $this->createTable('{{%gallery}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create team table
        $this->createTable('{{%team}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->defaultValue(null),
            'phone' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);


        // Create site_info table
        $this->createTable('{{%site_info}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'address' => $this->string()->defaultValue(null),
            'mission' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'logo' => $this->string()->defaultValue(null),
            'favicon' => $this->string()->defaultValue(null),
            'phone' => $this->string()->defaultValue(null),
            'instagram' => $this->string()->defaultValue(null),
            'facebook' => $this->string()->defaultValue(null),
            'twitter' => $this->string()->defaultValue(null),
            'footer_text' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create cause table
        $this->createTable('{{%cause}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'target_amount' => $this->string()->defaultValue(null),
            'location' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create home_page table
        $this->createTable('{{%home_page}}', [
            'id' => $this->primaryKey(),
            'main_banner' => $this->string()->defaultValue(null),
            'main_banner_title' => $this->string()->defaultValue(null),
            'main_banner_sub_title' => $this->string()->defaultValue(null),
            'causes_title' => $this->string()->defaultValue(null),
            'causes_sub_title' => $this->string()->defaultValue(null),
            'causes_description' => $this->string()->defaultValue(null),
            'causes_count' => $this->string()->defaultValue(null),
            'events_title' => $this->string()->defaultValue(null),
            'events_description' => $this->string()->defaultValue(null),
            'events_count' => $this->string()->defaultValue(null),
            'help_title' => $this->string()->defaultValue(null),
            'help_description' => $this->string()->defaultValue(null),
            'video_link' => $this->string()->defaultValue(null),
            'contact_title' => $this->string()->defaultValue(null),
            'contact_image' => $this->string()->defaultValue(null),
            // 'description' => $this->text()->defaultValue(null),
            // 'target_amount' => $this->string()->defaultValue(null),
            // 'location' => $this->string()->defaultValue(null),
            'background_image' => $this->string()->defaultValue(null),
            // 'status' => $this->smallInteger()->defaultValue(null)->defaultValue(10),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create blog_page table
        $this->createTable('{{%blog_page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'banner_image' => $this->text()->defaultValue(null),
            'count' => $this->text()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create event_page table
        $this->createTable('{{%event_page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'banner_image' => $this->text()->defaultValue(null),
            'count' => $this->text()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);

        // Create cause_page table
        $this->createTable('{{%cause_page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'banner_image' => $this->text()->defaultValue(null),
            'count' => $this->text()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
            'created_by' => $this->string()->defaultValue(null),
            'updated_by' => $this->string()->defaultValue(null),
        ]);
        // Create donate table
        $this->createTable('{{%donate}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'phone' => $this->string()->defaultValue(null),
            'amount' => $this->string()->defaultValue(null),
            'status' => $this->text()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%site_info}}');
        $this->dropTable('{{%team}}');
        $this->dropTable('{{%gallery}}');
        $this->dropTable('{{%blog}}');
        $this->dropTable('{{%event}}');
        $this->dropTable('{{%main_banner}}');
        $this->dropTable('{{%auth_assignment}}');
        $this->dropTable('{{%auth_item_child}}');
        $this->dropTable('{{%auth_item}}');
        $this->dropTable('{{%auth_rule}}');
        $this->dropTable('{{%user}}');
    }

    protected function buildFkClause($delete = '', $update = '')
    {
        return implode(' ', ['', $delete, $update]);
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220807154613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE award_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE employee_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE map_marker_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE our_client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE project_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE project_category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE project_genre_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE site_settings_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE award (id INT NOT NULL, year INT DEFAULT NULL, name VARCHAR(255) NOT NULL, logo_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE employee (id INT NOT NULL, name VARCHAR(255) NOT NULL, bio VARCHAR(255) DEFAULT NULL, position VARCHAR(255) NOT NULL, social_links JSON DEFAULT NULL, avatar_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE map_marker (id INT NOT NULL, title VARCHAR(255) NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, icon_url VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE our_client (id INT NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product (id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, cost DOUBLE PRECISION NOT NULL, dimension VARCHAR(255) DEFAULT NULL, photo_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE project (id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, year INT NOT NULL, photo_url VARCHAR(255) NOT NULL, video_url VARCHAR(255) NOT NULL, preview_video_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE project_category (id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE project_genre (id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE site_settings (id INT NOT NULL, contact_phone_number VARCHAR(255) NOT NULL, contact_email VARCHAR(255) NOT NULL, company_address VARCHAR(255) NOT NULL, social_links JSON NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE award_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE employee_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE map_marker_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE our_client_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE project_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE project_category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE project_genre_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE site_settings_id_seq CASCADE');
        $this->addSql('DROP TABLE award');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE map_marker');
        $this->addSql('DROP TABLE our_client');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_category');
        $this->addSql('DROP TABLE project_genre');
        $this->addSql('DROP TABLE site_settings');
    }
}

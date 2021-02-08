<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210208092102 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_C8B28E4453C674EE');
        $this->addSql('CREATE TEMPORARY TABLE __temp__candidate AS SELECT id, offer_id, created_at, user_name, user_email, user_motivations, status FROM candidate');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('CREATE TABLE candidate (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, offer_id INTEGER DEFAULT NULL, created_at DATETIME NOT NULL, user_name VARCHAR(255) NOT NULL COLLATE BINARY, user_email VARCHAR(255) NOT NULL COLLATE BINARY, user_motivations CLOB NOT NULL COLLATE BINARY, status VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_C8B28E4453C674EE FOREIGN KEY (offer_id) REFERENCES offer (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO candidate (id, offer_id, created_at, user_name, user_email, user_motivations, status) SELECT id, offer_id, created_at, user_name, user_email, user_motivations, status FROM __temp__candidate');
        $this->addSql('DROP TABLE __temp__candidate');
        $this->addSql('CREATE INDEX IDX_C8B28E4453C674EE ON candidate (offer_id)');
        $this->addSql('DROP INDEX IDX_29D6873EBE04EA9');
        $this->addSql('CREATE TEMPORARY TABLE __temp__offer AS SELECT id, job_id, created_at, department, description, zipcode, city, contact_email, reference, longitude, company, latitude FROM offer');
        $this->addSql('DROP TABLE offer');
        $this->addSql('CREATE TABLE offer (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, job_id INTEGER DEFAULT NULL, created_at DATETIME NOT NULL, department VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB NOT NULL COLLATE BINARY, zipcode VARCHAR(255) NOT NULL COLLATE BINARY, city VARCHAR(255) NOT NULL COLLATE BINARY, contact_email VARCHAR(255) NOT NULL COLLATE BINARY, reference VARCHAR(255) NOT NULL COLLATE BINARY, company VARCHAR(255) DEFAULT NULL COLLATE BINARY, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION DEFAULT NULL, CONSTRAINT FK_29D6873EBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO offer (id, job_id, created_at, department, description, zipcode, city, contact_email, reference, longitude, company, latitude) SELECT id, job_id, created_at, department, description, zipcode, city, contact_email, reference, longitude, company, latitude FROM __temp__offer');
        $this->addSql('DROP TABLE __temp__offer');
        $this->addSql('CREATE INDEX IDX_29D6873EBE04EA9 ON offer (job_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_C8B28E4453C674EE');
        $this->addSql('CREATE TEMPORARY TABLE __temp__candidate AS SELECT id, offer_id, created_at, user_name, user_email, user_motivations, status FROM candidate');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('CREATE TABLE candidate (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, offer_id INTEGER DEFAULT NULL, created_at DATETIME NOT NULL, user_name VARCHAR(255) NOT NULL, user_email VARCHAR(255) NOT NULL, user_motivations CLOB NOT NULL, status VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO candidate (id, offer_id, created_at, user_name, user_email, user_motivations, status) SELECT id, offer_id, created_at, user_name, user_email, user_motivations, status FROM __temp__candidate');
        $this->addSql('DROP TABLE __temp__candidate');
        $this->addSql('CREATE INDEX IDX_C8B28E4453C674EE ON candidate (offer_id)');
        $this->addSql('DROP INDEX IDX_29D6873EBE04EA9');
        $this->addSql('CREATE TEMPORARY TABLE __temp__offer AS SELECT id, job_id, created_at, department, description, zipcode, city, company, contact_email, reference, latitude, longitude FROM offer');
        $this->addSql('DROP TABLE offer');
        $this->addSql('CREATE TABLE offer (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, job_id INTEGER DEFAULT NULL, created_at DATETIME NOT NULL, department VARCHAR(255) NOT NULL, description CLOB NOT NULL, zipcode VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, company VARCHAR(255) DEFAULT NULL, contact_email VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION NOT NULL)');
        $this->addSql('INSERT INTO offer (id, job_id, created_at, department, description, zipcode, city, company, contact_email, reference, latitude, longitude) SELECT id, job_id, created_at, department, description, zipcode, city, company, contact_email, reference, latitude, longitude FROM __temp__offer');
        $this->addSql('DROP TABLE __temp__offer');
        $this->addSql('CREATE INDEX IDX_29D6873EBE04EA9 ON offer (job_id)');
    }
}

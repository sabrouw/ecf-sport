<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220825151528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A38898CF5');
        $this->addSql('DROP INDEX IDX_5BBEC55A38898CF5 ON structures');
        
        $this->addSql('ALTER TABLE user ADD partenaires_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64938898CF5 FOREIGN KEY (partenaires_id) REFERENCES partenaires (id)');
        //$this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64938898CF5 ON user (partenaires_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD partenaires_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A38898CF5 FOREIGN KEY (partenaires_id) REFERENCES partenaires (id)');

        //$this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64938898CF5');
        //$this->addSql('DROP INDEX UNIQ_8D93D64938898CF5 ON user');
        
    }
}


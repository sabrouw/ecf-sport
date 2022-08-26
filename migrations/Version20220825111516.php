<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220825111516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD ass_structures_id INT DEFAULT NULL, ADD is_verified TINYINT(1) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A3FF630AA FOREIGN KEY (ass_structures_id) REFERENCES partenaires (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5BBEC55AE7927C74 ON structures (email)');
        $this->addSql('CREATE INDEX IDX_5BBEC55A3FF630AA ON structures (ass_structures_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A3FF630AA');
        $this->addSql('DROP INDEX UNIQ_5BBEC55AE7927C74 ON structures');
        $this->addSql('DROP INDEX IDX_5BBEC55A3FF630AA ON structures');
        $this->addSql('ALTER TABLE structures DROP ass_structures_id, DROP is_verified, CHANGE email email VARCHAR(255) NOT NULL, CHANGE roles roles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
    }
}

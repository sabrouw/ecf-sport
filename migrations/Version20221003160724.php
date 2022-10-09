<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221003160724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions ADD permspartenaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6FCE6A82A2 FOREIGN KEY (permspartenaire_id) REFERENCES partenaires (id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6FCE6A82A2 ON permissions (permspartenaire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6FCE6A82A2');
        $this->addSql('DROP INDEX IDX_2DEDCC6FCE6A82A2 ON permissions');
        $this->addSql('ALTER TABLE permissions DROP permspartenaire_id');
    }
}

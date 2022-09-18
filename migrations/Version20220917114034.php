<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220917114034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6F98DE13AC');
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6F4CE34BEC');
        $this->addSql('DROP INDEX IDX_2DEDCC6F4CE34BEC ON permissions');
        $this->addSql('DROP INDEX IDX_2DEDCC6F98DE13AC ON permissions');
        $this->addSql('ALTER TABLE permissions DROP partenaire_id, DROP part_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions ADD partenaire_id INT DEFAULT NULL, ADD part_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6F98DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaires (id)');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6F4CE34BEC FOREIGN KEY (part_id) REFERENCES partenaires (id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6F4CE34BEC ON permissions (part_id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6F98DE13AC ON permissions (partenaire_id)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221003165020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6F84EA0FD0');
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6FCE6A82A2');
        $this->addSql('DROP INDEX IDX_2DEDCC6F84EA0FD0 ON permissions');
        $this->addSql('DROP INDEX IDX_2DEDCC6FCE6A82A2 ON permissions');
        $this->addSql('ALTER TABLE permissions DROP struct_id, DROP permspartenaire_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions ADD struct_id INT DEFAULT NULL, ADD permspartenaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6F84EA0FD0 FOREIGN KEY (struct_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6FCE6A82A2 FOREIGN KEY (permspartenaire_id) REFERENCES partenaires (id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6F84EA0FD0 ON permissions (struct_id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6FCE6A82A2 ON permissions (permspartenaire_id)');
    }
}

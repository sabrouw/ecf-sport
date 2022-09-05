<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220905141810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD permission1_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55AAD23DF31 FOREIGN KEY (permission1_id) REFERENCES permissions (id)');
        $this->addSql('CREATE INDEX IDX_5BBEC55AAD23DF31 ON structures (permission1_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55AAD23DF31');
        $this->addSql('DROP INDEX IDX_5BBEC55AAD23DF31 ON structures');
        $this->addSql('ALTER TABLE structures DROP permission1_id');
    }
}

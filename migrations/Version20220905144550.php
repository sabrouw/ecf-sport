<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220905144550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD permission3_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A72A17BA FOREIGN KEY (permission3_id) REFERENCES permissions (id)');
        $this->addSql('CREATE INDEX IDX_5BBEC55A72A17BA ON structures (permission3_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A72A17BA');
        $this->addSql('DROP INDEX IDX_5BBEC55A72A17BA ON structures');
        $this->addSql('ALTER TABLE structures DROP permission3_id');
    }
}

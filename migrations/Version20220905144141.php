<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220905144141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD permissions2_id INT DEFAULT NULL, ADD permission2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55AB799AAB1 FOREIGN KEY (permissions2_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55ABF9670DF FOREIGN KEY (permission2_id) REFERENCES permissions (id)');
        $this->addSql('CREATE INDEX IDX_5BBEC55AB799AAB1 ON structures (permissions2_id)');
        $this->addSql('CREATE INDEX IDX_5BBEC55ABF9670DF ON structures (permission2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55AB799AAB1');
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55ABF9670DF');
        $this->addSql('DROP INDEX IDX_5BBEC55AB799AAB1 ON structures');
        $this->addSql('DROP INDEX IDX_5BBEC55ABF9670DF ON structures');
        $this->addSql('ALTER TABLE structures DROP permissions2_id, DROP permission2_id');
    }
}

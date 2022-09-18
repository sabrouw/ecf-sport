<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220917081005 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD partenariat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A5C1628E0 FOREIGN KEY (partenariat_id) REFERENCES partenaires (id)');
        $this->addSql('CREATE INDEX IDX_5BBEC55A5C1628E0 ON structures (partenariat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A5C1628E0');
        $this->addSql('DROP INDEX IDX_5BBEC55A5C1628E0 ON structures');
        $this->addSql('ALTER TABLE structures DROP partenariat_id');
    }
}

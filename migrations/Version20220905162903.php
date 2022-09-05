<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220905162903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partenaires ADD permission1_id INT DEFAULT NULL, ADD permission2_id INT DEFAULT NULL, ADD permission3_id INT DEFAULT NULL, ADD permission4_id INT DEFAULT NULL, ADD permission5_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partenaires ADD CONSTRAINT FK_D230102EAD23DF31 FOREIGN KEY (permission1_id) REFERENCES permissions (id)');
        $this->addSql('ALTER TABLE partenaires ADD CONSTRAINT FK_D230102EBF9670DF FOREIGN KEY (permission2_id) REFERENCES permissions (id)');
        $this->addSql('ALTER TABLE partenaires ADD CONSTRAINT FK_D230102E72A17BA FOREIGN KEY (permission3_id) REFERENCES permissions (id)');
        $this->addSql('ALTER TABLE partenaires ADD CONSTRAINT FK_D230102E9AFD2F03 FOREIGN KEY (permission4_id) REFERENCES permissions (id)');
        $this->addSql('ALTER TABLE partenaires ADD CONSTRAINT FK_D230102E22414866 FOREIGN KEY (permission5_id) REFERENCES permissions (id)');
        $this->addSql('CREATE INDEX IDX_D230102EAD23DF31 ON partenaires (permission1_id)');
        $this->addSql('CREATE INDEX IDX_D230102EBF9670DF ON partenaires (permission2_id)');
        $this->addSql('CREATE INDEX IDX_D230102E72A17BA ON partenaires (permission3_id)');
        $this->addSql('CREATE INDEX IDX_D230102E9AFD2F03 ON partenaires (permission4_id)');
        $this->addSql('CREATE INDEX IDX_D230102E22414866 ON partenaires (permission5_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partenaires DROP FOREIGN KEY FK_D230102EAD23DF31');
        $this->addSql('ALTER TABLE partenaires DROP FOREIGN KEY FK_D230102EBF9670DF');
        $this->addSql('ALTER TABLE partenaires DROP FOREIGN KEY FK_D230102E72A17BA');
        $this->addSql('ALTER TABLE partenaires DROP FOREIGN KEY FK_D230102E9AFD2F03');
        $this->addSql('ALTER TABLE partenaires DROP FOREIGN KEY FK_D230102E22414866');
        $this->addSql('DROP INDEX IDX_D230102EAD23DF31 ON partenaires');
        $this->addSql('DROP INDEX IDX_D230102EBF9670DF ON partenaires');
        $this->addSql('DROP INDEX IDX_D230102E72A17BA ON partenaires');
        $this->addSql('DROP INDEX IDX_D230102E9AFD2F03 ON partenaires');
        $this->addSql('DROP INDEX IDX_D230102E22414866 ON partenaires');
        $this->addSql('ALTER TABLE partenaires DROP permission1_id, DROP permission2_id, DROP permission3_id, DROP permission4_id, DROP permission5_id');
    }
}

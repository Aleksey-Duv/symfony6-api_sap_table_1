<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230602114734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ztinmm_tk_h ADD bukrs_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ztinmm_tk_h ADD CONSTRAINT FK_87D4C94FDA224083 FOREIGN KEY (bukrs_id_id) REFERENCES t001 (id)');
        $this->addSql('CREATE INDEX IDX_87D4C94FDA224083 ON ztinmm_tk_h (bukrs_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ztinmm_tk_h DROP FOREIGN KEY FK_87D4C94FDA224083');
        $this->addSql('DROP INDEX IDX_87D4C94FDA224083 ON ztinmm_tk_h');
        $this->addSql('ALTER TABLE ztinmm_tk_h DROP bukrs_id_id');
    }
}

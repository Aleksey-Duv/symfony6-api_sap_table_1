<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230601122545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zinmm_sof_lot_h ADD konkurs_id INT NOT NULL');
        $this->addSql('ALTER TABLE zinmm_sof_lot_h ADD CONSTRAINT FK_C2D2F2583DF04F9F FOREIGN KEY (konkurs_id) REFERENCES ztinmm_tk_h (konkurs_id)');
        $this->addSql('CREATE INDEX IDX_C2D2F2583DF04F9F ON zinmm_sof_lot_h (konkurs_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zinmm_sof_lot_h DROP FOREIGN KEY FK_C2D2F2583DF04F9F');
        $this->addSql('DROP INDEX IDX_C2D2F2583DF04F9F ON zinmm_sof_lot_h');
        $this->addSql('ALTER TABLE zinmm_sof_lot_h DROP konkurs_id');
    }
}

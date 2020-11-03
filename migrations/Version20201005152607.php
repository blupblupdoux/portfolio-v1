<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201005152607 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEE4873418');
        $this->addSql('DROP INDEX UNIQ_2FB3D0EEE4873418 ON project');
        $this->addSql('ALTER TABLE project ADD main_image VARCHAR(255) DEFAULT NULL, DROP main_image_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project ADD main_image_id INT DEFAULT NULL, DROP main_image');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEE4873418 FOREIGN KEY (main_image_id) REFERENCES image (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EEE4873418 ON project (main_image_id)');
    }
}

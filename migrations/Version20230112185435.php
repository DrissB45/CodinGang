<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230112185435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955F16F4AC6');
        $this->addSql('DROP INDEX UNIQ_42C84955F16F4AC6 ON reservation');
        $this->addSql('ALTER TABLE reservation ADD driver_id INT DEFAULT NULL, ADD date DATE NOT NULL, ADD datedefin DATE NOT NULL, DROP conducteur_id, \'(DC2Type:dateinterval)\'');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C3423909 FOREIGN KEY (driver_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_42C84955C3423909 ON reservation (driver_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C3423909');
        $this->addSql('DROP INDEX UNIQ_42C84955C3423909 ON reservation');
        $this->addSql('ALTER TABLE reservation ADD conducteur_id INT NOT NULL, DROP driver_id, DROP date, DROP datedefin, \'(DC2Type:dateinterval)\'');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955F16F4AC6 FOREIGN KEY (conducteur_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_42C84955F16F4AC6 ON reservation (conducteur_id)');
    }
}

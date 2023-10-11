<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20231011155559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create Mage Fighter and Stat Fighter to hold statistics';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE mage_fighter (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(26) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stat_fighter (id INT AUTO_INCREMENT NOT NULL, fighter_id INT DEFAULT NULL, health DOUBLE PRECISION NOT NULL, armor INT NOT NULL, resilience INT NOT NULL, strength INT NOT NULL, intelligence INT NOT NULL, agility INT NOT NULL, luck INT NOT NULL, UNIQUE INDEX UNIQ_9EF2B46534934341 (fighter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stat_fighter ADD CONSTRAINT FK_9EF2B46534934341 FOREIGN KEY (fighter_id) REFERENCES mage_fighter (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE stat_fighter DROP FOREIGN KEY FK_9EF2B46534934341');
        $this->addSql('DROP TABLE mage_fighter');
        $this->addSql('DROP TABLE stat_fighter');
    }
}

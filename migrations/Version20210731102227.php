<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210731102227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usage_network (id INT AUTO_INCREMENT NOT NULL, lo_recv_bytes DOUBLE PRECISION DEFAULT NULL, lo_recv_pckts INT DEFAULT NULL, lo_trns_bytes DOUBLE PRECISION DEFAULT NULL, lo_trns_pckts INT DEFAULT NULL, wlp7s0_recv_bytes DOUBLE PRECISION DEFAULT NULL, wlp7s0_recv_pckts INT DEFAULT NULL, wlp7s0_recv_frms INT DEFAULT NULL, wlp7s0_trns_bytes DOUBLE PRECISION DEFAULT NULL, wlp7s0_trns_pckts INT DEFAULT NULL, time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE usage_network');
    }
}

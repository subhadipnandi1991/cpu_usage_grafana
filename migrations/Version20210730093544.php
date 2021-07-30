<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210730093544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cpu_usage (id INT AUTO_INCREMENT NOT NULL, lo_recv_bytes BIGINT DEFAULT NULL, lo_recv_pckts INT DEFAULT NULL, lo_trns_bytes BIGINT DEFAULT NULL, lo_trbs_pckts INT DEFAULT NULL, wlp7s0_recv_bytes BIGINT DEFAULT NULL, wlp7s0_recv_pckts INT DEFAULT NULL, wlp7s0_recv_frms INT DEFAULT NULL, wlp7s0_trns_bytes BIGINT DEFAULT NULL, wlp7s0_trns_pckts INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cpu_usage');
    }
}

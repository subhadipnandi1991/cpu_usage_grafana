<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210731101320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usage_cpu (id INT AUTO_INCREMENT NOT NULL, cpu_usage DOUBLE PRECISION DEFAULT NULL, time DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usage_disk (id INT AUTO_INCREMENT NOT NULL, total_disk DOUBLE PRECISION DEFAULT NULL, free_disk DOUBLE PRECISION DEFAULT NULL, used_disk DOUBLE PRECISION DEFAULT NULL, disk_usage INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usage_memory (id INT AUTO_INCREMENT NOT NULL, total_memory DOUBLE PRECISION DEFAULT NULL, used_memory DOUBLE PRECISION DEFAULT NULL, free_memory DOUBLE PRECISION DEFAULT NULL, shared_memory DOUBLE PRECISION DEFAULT NULL, cached_memory DOUBLE PRECISION DEFAULT NULL, available_memory DOUBLE PRECISION DEFAULT NULL, time DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE usage_cpu');
        $this->addSql('DROP TABLE usage_disk');
        $this->addSql('DROP TABLE usage_memory');
    }
}

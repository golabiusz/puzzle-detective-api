<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170323153423 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE puzzle_variablegroup (id INT UNSIGNED AUTO_INCREMENT NOT NULL, puzzle_id INT UNSIGNED NOT NULL, name VARCHAR(255) NOT NULL, position INT DEFAULT 0 NOT NULL COMMENT \'The position of group inside puzzle.\', created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_D12208AFD9816812 (puzzle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE puzzle_puzzle (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, information LONGTEXT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE puzzle_variable (id INT UNSIGNED AUTO_INCREMENT NOT NULL, variablegroup_id INT UNSIGNED NOT NULL, name VARCHAR(255) NOT NULL, position INT DEFAULT 0 NOT NULL COMMENT \'The position of variable inside group.\', created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_98116ADCE4F88158 (variablegroup_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE puzzle_variablegroup ADD CONSTRAINT FK_D12208AFD9816812 FOREIGN KEY (puzzle_id) REFERENCES puzzle_puzzle (id)');
        $this->addSql('ALTER TABLE puzzle_variable ADD CONSTRAINT FK_98116ADCE4F88158 FOREIGN KEY (variablegroup_id) REFERENCES puzzle_variablegroup (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE puzzle_variable DROP FOREIGN KEY FK_98116ADCE4F88158');
        $this->addSql('ALTER TABLE puzzle_variablegroup DROP FOREIGN KEY FK_D12208AFD9816812');
        $this->addSql('DROP TABLE puzzle_variablegroup');
        $this->addSql('DROP TABLE puzzle_puzzle');
        $this->addSql('DROP TABLE puzzle_variable');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427091006 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Client CHANGE mot_de_passe mot_de_passe VARCHAR(45) NOT NULL');
        $this->addSql('ALTER TABLE Commande CHANGE idCommande idCommande INT AUTO_INCREMENT NOT NULL, CHANGE idClient idClient INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Commande_has_Plat CHANGE idComposition idComposition INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Composition CHANGE idComposition idComposition INT AUTO_INCREMENT NOT NULL, CHANGE idPlat idPlat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Composition_has_Ingredient RENAME INDEX fk_composition_has_ingredient_composition1_idx TO IDX_A5389E114C22BC3F');
        $this->addSql('ALTER TABLE Composition_has_Ingredient RENAME INDEX fk_composition_has_ingredient_ingredient1_idx TO IDX_A5389E11E95B669A');
        $this->addSql('ALTER TABLE Ingredient DROP image, CHANGE idIngredient idIngredient INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Client CHANGE mot_de_passe mot_de_passe VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE Commande CHANGE idCommande idCommande INT NOT NULL, CHANGE idClient idClient INT NOT NULL');
        $this->addSql('ALTER TABLE Commande_has_Plat CHANGE idComposition idComposition INT NOT NULL');
        $this->addSql('ALTER TABLE Composition CHANGE idComposition idComposition INT NOT NULL, CHANGE idPlat idPlat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE composition_has_ingredient RENAME INDEX idx_a5389e11e95b669a TO fk_Composition_has_Ingredient_Ingredient1_idx');
        $this->addSql('ALTER TABLE composition_has_ingredient RENAME INDEX idx_a5389e114c22bc3f TO fk_Composition_has_Ingredient_Composition1_idx');
        $this->addSql('ALTER TABLE Ingredient ADD image BLOB DEFAULT NULL, CHANGE idIngredient idIngredient INT NOT NULL');
    }
}

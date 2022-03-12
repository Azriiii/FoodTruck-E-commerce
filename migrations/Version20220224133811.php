<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220224133811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(55) DEFAULT NULL, prenom VARCHAR(55) DEFAULT NULL, numcommande VARCHAR(55) DEFAULT NULL, text VARCHAR(65) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe CHANGE nom nom VARCHAR(55) DEFAULT NULL, CHANGE prenom prenom VARCHAR(55) DEFAULT NULL, CHANGE age age INT DEFAULT NULL, CHANGE metier metier VARCHAR(55) DEFAULT NULL');
        $this->addSql('ALTER TABLE equippement CHANGE nom nom VARCHAR(44) DEFAULT NULL, CHANGE metier metier VARCHAR(64) DEFAULT NULL');
        $this->addSql('ALTER TABLE fournisseur CHANGE nom nom VARCHAR(45) DEFAULT NULL, CHANGE numero numero INT DEFAULT NULL, CHANGE designation designation VARCHAR(66) DEFAULT NULL, CHANGE statu statu VARCHAR(66) DEFAULT NULL, CHANGE email email VARCHAR(90) DEFAULT NULL');
        $this->addSql('ALTER TABLE livreur CHANGE nom nom VARCHAR(44) DEFAULT NULL, CHANGE prenom prenom VARCHAR(55) DEFAULT NULL, CHANGE tel tel INT DEFAULT NULL, CHANGE email email VARCHAR(555) DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE category_id category_id INT DEFAULT NULL, CHANGE quantite quantite INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id_reclamation id_reclamation INT DEFAULT NULL, CHANGE description description VARCHAR(55) DEFAULT NULL, CHANGE date date DATE DEFAULT NULL, CHANGE nom nom VARCHAR(55) DEFAULT NULL, CHANGE email email VARCHAR(44) DEFAULT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE id_reponse id_reponse INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stocks CHANGE stocks_id stocks_id INT DEFAULT NULL, CHANGE qte_prod qte_prod INT DEFAULT NULL, CHANGE nom nom VARCHAR(49) DEFAULT NULL, CHANGE numerof numerof INT DEFAULT NULL, CHANGE prix_unitaire prix_unitaire INT DEFAULT NULL, CHANGE idprod idprod INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contact');
        $this->addSql('ALTER TABLE equipe CHANGE nom nom VARCHAR(55) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(55) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE age age INT DEFAULT NULL, CHANGE metier metier VARCHAR(55) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE equippement CHANGE nom nom VARCHAR(44) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE metier metier VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE fournisseur CHANGE nom nom VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE numero numero INT DEFAULT NULL, CHANGE designation designation VARCHAR(66) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE statu statu VARCHAR(66) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(90) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE livreur CHANGE nom nom VARCHAR(44) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(55) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel tel INT DEFAULT NULL, CHANGE email email VARCHAR(555) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE product CHANGE category_id category_id INT DEFAULT NULL, CHANGE quantite quantite INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id_reclamation id_reclamation INT DEFAULT NULL, CHANGE description description VARCHAR(55) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date date DATE DEFAULT \'NULL\', CHANGE nom nom VARCHAR(55) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(44) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponse CHANGE id_reponse id_reponse INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stocks CHANGE stocks_id stocks_id INT DEFAULT NULL, CHANGE qte_prod qte_prod INT DEFAULT NULL, CHANGE nom nom VARCHAR(49) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE numerof numerof INT DEFAULT NULL, CHANGE prix_unitaire prix_unitaire INT DEFAULT NULL, CHANGE idprod idprod INT DEFAULT NULL');
    }
}

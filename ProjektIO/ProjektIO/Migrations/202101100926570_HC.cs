namespace ProjektIO.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class HC : DbMigration
    {
        public override void Up()
        {
            CreateTable(
                "dbo.Postać",
                c => new
                    {
                        PostacID = c.Int(nullable: false, identity: true),
                        IDPostaci = c.Int(nullable: false),
                        Cechy = c.Int(nullable: false),
                        Umiejetnosci = c.Int(nullable: false),
                        TraityID = c.Int(nullable: false),
                        SpellbookID = c.Int(nullable: false),
                        PrzedmiotyID = c.Int(nullable: false),
                    })
                .PrimaryKey(t => t.PostacID)
                .ForeignKey("dbo.Przedmiotie", t => t.PrzedmiotyID, cascadeDelete: true)
                .ForeignKey("dbo.Spellbook", t => t.SpellbookID, cascadeDelete: true)
                .ForeignKey("dbo.Traitie", t => t.TraityID, cascadeDelete: true)
                .Index(t => t.TraityID)
                .Index(t => t.SpellbookID)
                .Index(t => t.PrzedmiotyID);
            
            CreateTable(
                "dbo.Przedmiotie",
                c => new
                    {
                        PrzedmiotyID = c.Int(nullable: false, identity: true),
                        IDPrzedmiotu = c.Int(nullable: false),
                        Rzadkość = c.String(),
                        NazwaPrzedmiotu = c.String(),
                        bonusy = c.String(),
                        RodzajPrzedmiotu = c.String(),
                        Ulepszenie = c.Int(nullable: false),
                    })
                .PrimaryKey(t => t.PrzedmiotyID);
            
            CreateTable(
                "dbo.Spellbook",
                c => new
                    {
                        SpellbookID = c.Int(nullable: false, identity: true),
                        Zaklęcia = c.String(),
                    })
                .PrimaryKey(t => t.SpellbookID);
            
            CreateTable(
                "dbo.Traitie",
                c => new
                    {
                        TraityID = c.Int(nullable: false, identity: true),
                        CechyPosiadane = c.String(),
                        Przywary = c.String(),
                    })
                .PrimaryKey(t => t.TraityID);
            
        }
        
        public override void Down()
        {
            DropForeignKey("dbo.Postać", "TraityID", "dbo.Traities");
            DropForeignKey("dbo.Postać", "SpellbookID", "dbo.Spellbooks");
            DropForeignKey("dbo.Postać", "PrzedmiotyID", "dbo.Przedmioties");
            DropIndex("dbo.Postać", new[] { "PrzedmiotyID" });
            DropIndex("dbo.Postać", new[] { "SpellbookID" });
            DropIndex("dbo.Postać", new[] { "TraityID" });
            DropTable("dbo.Traities");
            DropTable("dbo.Spellbooks");
            DropTable("dbo.Przedmioties");
            DropTable("dbo.Postać");
        }
    }
}

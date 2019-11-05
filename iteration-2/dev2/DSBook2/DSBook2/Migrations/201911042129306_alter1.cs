namespace DSBook2.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class alter1 : DbMigration
    {
        public override void Up()
        {
            AddColumn("dbo.Pupils", "School_Id", c => c.Int());
            AddColumn("dbo.Teachers", "School_Id", c => c.Int());
            CreateIndex("dbo.Pupils", "School_Id");
            CreateIndex("dbo.Teachers", "School_Id");
            AddForeignKey("dbo.Pupils", "School_Id", "dbo.Schools", "Id");
            AddForeignKey("dbo.Teachers", "School_Id", "dbo.Schools", "Id");
        }
        
        public override void Down()
        {
            DropForeignKey("dbo.Teachers", "School_Id", "dbo.Schools");
            DropForeignKey("dbo.Pupils", "School_Id", "dbo.Schools");
            DropIndex("dbo.Teachers", new[] { "School_Id" });
            DropIndex("dbo.Pupils", new[] { "School_Id" });
            DropColumn("dbo.Teachers", "School_Id");
            DropColumn("dbo.Pupils", "School_Id");
        }
    }
}

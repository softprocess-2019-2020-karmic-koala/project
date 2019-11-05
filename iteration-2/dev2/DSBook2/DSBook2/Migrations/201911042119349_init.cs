namespace DSBook2.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class init : DbMigration
    {
        public override void Up()
        {
            CreateTable(
                "dbo.Marks",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        MarkValue = c.Int(nullable: false),
                        Pupil_Id = c.Int(),
                        Subject_Id = c.Int(),
                        Teacher_Id = c.Int(),
                    })
                .PrimaryKey(t => t.Id)
                .ForeignKey("dbo.Pupils", t => t.Pupil_Id)
                .ForeignKey("dbo.Subjects", t => t.Subject_Id)
                .ForeignKey("dbo.Teachers", t => t.Teacher_Id)
                .Index(t => t.Pupil_Id)
                .Index(t => t.Subject_Id)
                .Index(t => t.Teacher_Id);
            
            CreateTable(
                "dbo.Pupils",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        FirstName = c.String(),
                        LastName = c.String(),
                        UserName = c.String(),
                        Password = c.String(),
                    })
                .PrimaryKey(t => t.Id);
            
            CreateTable(
                "dbo.Subjects",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        Name = c.String(),
                        School_Id = c.Int(),
                        Teacher_Id = c.Int(),
                    })
                .PrimaryKey(t => t.Id)
                .ForeignKey("dbo.Schools", t => t.School_Id)
                .ForeignKey("dbo.Teachers", t => t.Teacher_Id)
                .Index(t => t.School_Id)
                .Index(t => t.Teacher_Id);
            
            CreateTable(
                "dbo.Schools",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        Name = c.String(),
                    })
                .PrimaryKey(t => t.Id);
            
            CreateTable(
                "dbo.Teachers",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        FirstName = c.String(),
                        LastName = c.String(),
                        UserName = c.String(),
                        Password = c.String(),
                    })
                .PrimaryKey(t => t.Id);
            
        }
        
        public override void Down()
        {
            DropForeignKey("dbo.Marks", "Teacher_Id", "dbo.Teachers");
            DropForeignKey("dbo.Marks", "Subject_Id", "dbo.Subjects");
            DropForeignKey("dbo.Subjects", "Teacher_Id", "dbo.Teachers");
            DropForeignKey("dbo.Subjects", "School_Id", "dbo.Schools");
            DropForeignKey("dbo.Marks", "Pupil_Id", "dbo.Pupils");
            DropIndex("dbo.Subjects", new[] { "Teacher_Id" });
            DropIndex("dbo.Subjects", new[] { "School_Id" });
            DropIndex("dbo.Marks", new[] { "Teacher_Id" });
            DropIndex("dbo.Marks", new[] { "Subject_Id" });
            DropIndex("dbo.Marks", new[] { "Pupil_Id" });
            DropTable("dbo.Teachers");
            DropTable("dbo.Schools");
            DropTable("dbo.Subjects");
            DropTable("dbo.Pupils");
            DropTable("dbo.Marks");
        }
    }
}

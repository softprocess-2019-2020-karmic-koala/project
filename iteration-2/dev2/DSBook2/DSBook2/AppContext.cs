using DSBook2.Entities;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace DSBook2
{
    public class AppContext : DbContext
    {
        public AppContext() : base( "DefaultConnection" ) 
        {
        }
        public DbSet<School> Schools { get; set; }
        public DbSet<Teacher> Teachers { get; set; }
        public DbSet<Pupil> Pupils { get; set; }
        public DbSet<Subject> Subjects { get; set; }
        public DbSet<Mark> Marks { get; set; }
    }
}
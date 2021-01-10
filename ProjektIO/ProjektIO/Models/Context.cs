using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace ProjektIO.Models
{
    public class Context: DbContext
    {
        public Context() : base("name = Baza")
        { 
        }
        public DbSet<Postać> Postaćs { get; set; }
        public DbSet<Przedmioty> Przedmiotys { get; set; }
        public DbSet<Traity> Traitys { get; set; }
        public DbSet<Spellbook> Spellbooks { get; set; }

    }
}
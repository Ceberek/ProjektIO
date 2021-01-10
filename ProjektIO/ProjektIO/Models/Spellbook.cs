using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace ProjektIO.Models
{
    public class Spellbook
    {
        [Key]
        public int SpellbookID { get; set; }
        public int IDZaklęcia { get; set; }
        public string Zaklęcia { get; set; }
    }
}
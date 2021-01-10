using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace ProjektIO.Models
{
    public class Postać
    {
        [Key]
        public int PostacID { get; set; }
        public int IDPostaci { get; set; }
        public int Cechy { get; set; }

        public int Umiejetnosci { get; set; }

        public int TraityID { get; set; }
        public int SpellbookID { get; set; }
        public int PrzedmiotyID { get; set; }
        public virtual Traity Traity { get; set; }
        public virtual Spellbook Spellbook { get; set; }
        public virtual Przedmioty Przedmioty { get; set; }

    }
}
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace ProjektIO.Models
{
    public class Przedmioty
    {
        [Key]
        public int PrzedmiotyID { get; set; }
        public int IDPrzedmiotu { get; set; } 
        public string Rzadkość { get; set; }
        public string NazwaPrzedmiotu { get; set; }
        public string bonusy { get; set; }
        public string RodzajPrzedmiotu { get; set; }
        public int Ulepszenie { get; set; }



    }
}
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace ProjektIO.Models
{
    public class Traity
    {
        [Key]
        public int TraityID { get; set; }
        public string CechyPosiadane { get; set; }
        public string Przywary { get; set; }
    }
}
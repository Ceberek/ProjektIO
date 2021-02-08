using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace APIPostac.Models
{
    public class Player
    {
        [Key]
        public int ID { get; set; }
        public string name { get; set; }
    }
}

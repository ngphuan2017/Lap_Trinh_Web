using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace BTTH1.Models
{
    public class Tinh
    {
        [Required(ErrorMessage ="Phải nhập một số")]
        public double So1 { set; get; }
        [Required(ErrorMessage = "Phải nhập một số")]
        public double So2 { set; get; }
        public double KetQua { set; get; }
        public string Phep { set; get; }
        public string Errorr { set; get; }
        public Tinh()
        {
            Errorr = "";
        }
    }
}
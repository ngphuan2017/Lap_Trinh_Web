using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using BTTH1.Models;

namespace BTTH1.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index(Tinh model)
        {
            return View(model);
        }
        public ActionResult Calculate(Tinh model)
        {
            return View(model);
        }
        [HttpPost]
        public ActionResult Index(Tinh model, string command)
        {
            if (ModelState.IsValid)
            {
                switch (command)
                {
                    case "+": model.KetQua = model.So1 + model.So2; break;
                    case "-": model.KetQua = model.So1 - model.So2; break;
                    case "x": model.KetQua = model.So1 * model.So2; break;
                    case "/":
                        if (model.So2 != 0)
                            model.KetQua = model.So1 / model.So2;
                        else
                            model.Errorr = "Lỗi chia cho 0";
                        break;
                }
            }
            return View(model);
        }
        public ActionResult Calculate(Tinh model, string s="")
        {
            if (ModelState.IsValid)
            {
                switch (model.Phep)
                {
                    case "+": model.KetQua = model.So1 + model.So2; break;
                    case "-": model.KetQua = model.So1 - model.So2; break;
                    case "x": model.KetQua = model.So1 * model.So2; break;
                    case "/":
                        if (model.So2 != 0)
                            model.KetQua = model.So1 / model.So2;
                        else
                            model.Errorr = "Lỗi chia cho 0";
                        break;
                }
            }
            return RedirectToAction("Calculate", model);
        }
        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
    }
}
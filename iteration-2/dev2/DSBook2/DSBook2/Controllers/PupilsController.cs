using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Threading.Tasks;
using System.Net;
using System.Web;
using System.Web.Mvc;
using DSBook2;
using DSBook2.Entities;

namespace DSBook2.Controllers
{
    public class PupilsController : Controller
    {
        private AppContext db = new AppContext();

        // GET: Pupils
        public async Task<ActionResult> Index()
        {
            return View(await db.Pupils.ToListAsync());
        }

        // GET: Pupils/Details/5
        public async Task<ActionResult> Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Pupil pupil = await db.Pupils.FindAsync(id);
            if (pupil == null)
            {
                return HttpNotFound();
            }
            return View(pupil);
        }

        // GET: Pupils/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Pupils/Create
        // Чтобы защититься от атак чрезмерной передачи данных, включите определенные свойства, для которых следует установить привязку. Дополнительные 
        // сведения см. в статье https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> Create([Bind(Include = "Id,FirstName,LastName,UserName,Password")] Pupil pupil)
        {
            if (ModelState.IsValid)
            {
                db.Pupils.Add(pupil);
                await db.SaveChangesAsync();
                return RedirectToAction("Index");
            }

            return View(pupil);
        }

        // GET: Pupils/Edit/5
        public async Task<ActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Pupil pupil = await db.Pupils.FindAsync(id);
            if (pupil == null)
            {
                return HttpNotFound();
            }
            return View(pupil);
        }

        // POST: Pupils/Edit/5
        // Чтобы защититься от атак чрезмерной передачи данных, включите определенные свойства, для которых следует установить привязку. Дополнительные 
        // сведения см. в статье https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> Edit([Bind(Include = "Id,FirstName,LastName,UserName,Password")] Pupil pupil)
        {
            if (ModelState.IsValid)
            {
                db.Entry(pupil).State = EntityState.Modified;
                await db.SaveChangesAsync();
                return RedirectToAction("Index");
            }
            return View(pupil);
        }

        // GET: Pupils/Delete/5
        public async Task<ActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Pupil pupil = await db.Pupils.FindAsync(id);
            if (pupil == null)
            {
                return HttpNotFound();
            }
            return View(pupil);
        }

        // POST: Pupils/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> DeleteConfirmed(int id)
        {
            Pupil pupil = await db.Pupils.FindAsync(id);
            db.Pupils.Remove(pupil);
            await db.SaveChangesAsync();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}

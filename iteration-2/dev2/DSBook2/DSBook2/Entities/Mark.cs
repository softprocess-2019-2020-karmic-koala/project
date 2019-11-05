using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace DSBook2.Entities
{
    public class Mark : BaseEntity
    {
        public int MarkValue { get; set; }
        public Teacher Teacher { get; set; }
        public Pupil Pupil { get; set; }
        public Subject Subject { get; set; }
    }
}
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace DSBook2.Entities
{
    public class Subject : BaseEntity
    {
        public string Name { get; set; }
        public School School { get; set; }
        public Teacher Teacher { get; set; }
    }
}
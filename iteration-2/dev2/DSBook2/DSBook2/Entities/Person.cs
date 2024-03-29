﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace DSBook2.Entities
{
    abstract public class Person : BaseEntity
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string UserName { get; set; }
        public string Password { get; set; }
        public School School { get; set; }
    }
}
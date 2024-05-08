using Microsoft.AspNetCore.Mvc;

namespace BzuWebAPI.Controllers
{
    [ApiController]
    [Route("[controller]")]
    public class StudentsController : ControllerBase
    {
        private static List<Student> students = new List<Student>
        {
            new Student() { RollNumbder = 123, Name = "Kamran", Marks = 321 },
            new Student() { RollNumbder = 321, Name = "Qadir", Marks = 123 }
        };

        [HttpGet("/Students")]
        public List<Student> GetAll()
        {
            return students;
        }

        [HttpGet("/Students/{RollNumber}")]
        public Student Get(int RollNumber)
        {
            return students.FirstOrDefault(x => x.RollNumbder == RollNumber);
        }

        [HttpPost()]
        public void Create(Student student)
        {
            students.Add(student);
        }

        [HttpPut("/Students/{RollNumber}")]
        public void Update(Student student)
        {
            var s = students.FirstOrDefault(x => x.RollNumbder == student.RollNumbder);
            students.Remove(s);
            students.Add(student);
        }

        [HttpDelete("/Students/{RollNumber}")]
        public void Delete(int RollNumber)
        {
            var student = students.FirstOrDefault(x => x.RollNumbder == RollNumber);
            students.Remove(student);
        }
    }
}

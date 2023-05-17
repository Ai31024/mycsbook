using system;
namespace code1;
class Program
{
    static void Main(string[] args)
    {
        string inp_name;
        int inp_age;
        Console.Write("Enter your name: " + Console.Read(inp_name) + "\n");
        Console.Write("Enter your age: " + Console.Read(inp_age) + "\n");

        Console.WriteLine($"Your name is {inp_name}");
        Console.WriteLine($"Your age is {inp_age}");

        Console.Readline();
    }
}
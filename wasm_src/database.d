import std.stdio;

import hunt.database;

void main()
{
    writeln("run database MySQL demo.");

    auto db = new Database("mysql://root:123456@localhost:3306/test?charset=utf8mb4");

    int result = db.execute(`INSERT INTO user(username) VALUES("test")`);
    writeln(result);

    foreach(row; db.query("SELECT * FROM user LIMIT 10"))
    {
        writeln(row["username"]);
    }

    db.close();
}

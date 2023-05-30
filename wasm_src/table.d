module test.read;


import std.stdio;

import std.array;


auto readInData(File inputFile, string fieldSeparator)

{

    string[][] buffer;


    foreach (line; inputFile.byLine)

        buffer ~= split(line.idup, fieldSeparator);


    return buffer;

}


void main(string[] args)

{

    if (args.length > 1)

        writeln(readInData(

            File(args[1]),

            args.length > 2 ? args[2] : " "

        ));

}

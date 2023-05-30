extern(C): // disable D mangling

// import a function "callback" from default import module name "env"
void callback(double a, double b, double c);

double add(double a, double b)
{
    const c = a + b;
    callback(a, b, c);
    return c;
}

void _start() {}

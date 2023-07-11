import ldc.attributes;

extern(C): // disable D mangling

// import a function "add" from module name "math" and rename it to "add_numbers"
@llvmAttr("wasm-import-module", "math") @llvmAttr("wasm-import-name", "add") { 
	int add_numbers(int a, int b);
}

// export a function "hello"
export int hello(int a, int b, int c)
{
	int s1 = add_numbers(a, b);
	int s2 = add_numbers(s1, c);
	return s2;
}

void _start() {}

clean:
	rm -rf build

build:
	mkdir build
	ppm --no-intro --compile="src/OpStream" --directory="build"

install:
	ppm --no-prompt --fix-conflict --install="build/net.intellivoid.opstream.ppm"
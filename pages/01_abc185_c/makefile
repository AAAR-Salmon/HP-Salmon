pascals_triangle.svg: pascals_triangle.dvi
	dvisvgm pascals_triangle.dvi

pascals_triangle.dvi: pascals_triangle.tex
	uplatex -shell-escape pascals_triangle.tex

clean:
	rm -f pascals_triangle.{aux,dvi,log,svg}

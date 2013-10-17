MAINFILE = slides
FILES = $(MAINFILE).tex `ls $(MAINFILE)-*.tex | grep -v "diff"`

LATEXCC=rubber
LATEXCC_P=--pdf

export TEXMFHOME:=./texmf

.PHONY: all diff doc clean

all: pdf

pdf:
	$(LATEXCC) $(LATEXCC_P) $(MAINFILE).tex

clear:
	rm -rf *diff* img/*.4og $(MAINFILE) $(MAINFILE).aux \
		$(MAINFILE).log $(MAINFILE).blg $(MAINFILE).bbl \
		$(MAINFILE).toc $(MAINFILE).out $(MAINFILE).lof \
		$(MAINFILE).snm $(MAINFILE).nav $(MAINFILE).vrb \
		$(MAINFILE).lot $(MAINFILE).idx $(MAINFILE).bib.bak \
		X.tex

clean: clear
	rm -f *~ $(MAINFILE).pdf

def is_notebook() -> bool:
    try:
        shell = str(type(get_ipython()))
        if shell:
            return True   # Jupyter notebook or qtconsole
        else:
            return False  # Other type (?)
    except NameError:
        return False      # Probably standard Python interpreter

def fig_save_or_show(fig, file):
    if is_notebook():
        fig.show()
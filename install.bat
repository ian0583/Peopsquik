@echo off
md application\views\.smarty\.compiled
md application\views\.smarty\.cache
md log
md uploads
del application\views\.smarty\.compiled\*
del application\views\.smarty\.cache\*

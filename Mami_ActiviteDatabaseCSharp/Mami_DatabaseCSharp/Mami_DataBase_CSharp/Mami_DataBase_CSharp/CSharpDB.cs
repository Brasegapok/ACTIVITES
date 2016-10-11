
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Mami_DataBase_CSharp
{
    class CSharpDB
    {
        public bool ConnexionBase()
        {

            return (true);
        }
        public string[] GetProgrammes()
        {
            string[] result = {"1","5","3","5"};
            return result;
        }
        public int GetIndexProgrammeParNom(string nom)
        {
            int index = 1 /*fonction SQL qui identifie par le nom spécifié*/;
            return index;
        }
        public string[] GetProgrammesParIdLangageCode(int index)
        {
            string[] result = { "1", "5", "3", "5" };
            return result;
        }
        public string[] GetLangagesCode()
        {
            string[] result = { "1", "2", "2", "4" };
            return result;
        }
        public int GetIndexLangageCodeParAcronyme(string nom)
        {
            int index = 1 /*fonction SQL qui identifie par le nom spécifié*/;
            return index;
        }
        public string[] GetLangagesCodeParIdProgramme(int index)
        {
            string[] result = { "1", "2", "2", "4" };
            return result;
        }
    }
}

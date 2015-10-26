
using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;


namespace PruebaUnitaria
{
    [TestClass]
    public class UnitTest2
    {
        [TestMethod]
        public void TestMethod1()
        {
            int numeroPrimo = 3;
            int numeroIngresado = 5;

            //Assert.AreEqual(numeroPrimo,numeroIngresado);
            Assert.AreNotEqual(numeroPrimo, numeroIngresado);


                      


        }
    }
}
